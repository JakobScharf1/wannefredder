import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TeamOne } from './team-one';

describe('TeamOne', () => {
  let component: TeamOne;
  let fixture: ComponentFixture<TeamOne>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [TeamOne]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TeamOne);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
