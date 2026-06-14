import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioClassicThree } from './portfolio-classic-three';

describe('PortfolioClassicThree', () => {
  let component: PortfolioClassicThree;
  let fixture: ComponentFixture<PortfolioClassicThree>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioClassicThree]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioClassicThree);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
