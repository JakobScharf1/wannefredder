import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioDetailTwo } from './portfolio-detail-two';

describe('PortfolioDetailTwo', () => {
  let component: PortfolioDetailTwo;
  let fixture: ComponentFixture<PortfolioDetailTwo>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioDetailTwo]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioDetailTwo);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
